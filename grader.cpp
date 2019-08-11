/*
MAKE SURE THERE EXISTS AN OUTPUT & PROBLEMS FOLDER FIRST

Takes input from problems folder of given problem id
  input to code must exist in problem/input/1.in,2.in,3.in.....
Checks code output with the given problems output for certain test case
 output to code must exist in problems/output/1.out,2.out....
*/
#include <curl/curl.h>
#include<omp.h>
#include<fstream>
#include<signal.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <unistd.h>
#include <fcntl.h>
#include<iostream>
#include<cstring>
#include<time.h>
#include <sys/wait.h>
#include<sys/resource.h>
using namespace std;

int problem_id;
char* solution;
string verdict="";
string base_URL;
string submission_id;
void sendResponse(string verdict,int test_no,double run_time,string submission_id)
{
  string URL=base_URL+"?verdict="+verdict+"&tno="+to_string(test_no)+"&run_time="+to_string(run_time)+"&submission_id="+submission_id;
  cout<<URL<<endl;
  CURL *curl_handle;
  curl_global_init(CURL_GLOBAL_ALL);
  curl_handle = curl_easy_init();
  curl_easy_setopt(curl_handle, CURLOPT_URL, URL.c_str());
  curl_easy_perform(curl_handle);
  curl_easy_cleanup(curl_handle);
  curl_global_cleanup();
}
bool compareFiles(FILE *fp1, FILE *fp2)
{
    char ch1 = getc(fp1);
    char ch2 = getc(fp2);
    while (ch1 != EOF && ch2 != EOF)
    {
        if (ch1 != ch2)
        {
          return false;
        }
        ch1 = getc(fp1);
        ch2 = getc(fp2);
    }

  return true;
}


double get_cpu_usage()
{
  struct rusage r;struct timeval tim;
  getrusage(RUSAGE_THREAD,&r);
  double time_taken;
  tim=r.ru_utime;
  time_taken=(double)tim.tv_sec + (double)tim.tv_usec /1000000.0;
  tim=r.ru_stime;
  time_taken+=(double)tim.tv_sec + (double)tim.tv_usec /1000000.0;
  return time_taken;

}
void inline execute_test_case(int i,string out_folder)
{
  int pid=fork();
  string fout=out_folder+to_string(i)+".out";
  string inp="./problems/"+to_string(problem_id)+"/input/"+to_string(i)+".in";
  string actual_output="./problems/"+to_string(problem_id)+"/output/"+to_string(i)+".out";
  if(pid==0) //CHILD
  {

      int in,out;

      char *args[] = {solution,NULL};
      in=open(inp.c_str(),O_RDONLY);
      out=open(fout.c_str(), O_WRONLY | O_CREAT | O_TRUNC,S_IRUSR | S_IWUSR | S_IRGRP | S_IROTH);
      dup2(in,0);
      dup2(out,1);
      close(in);
      close(out);
      int err=execv(solution,args);
      if(err==-1)cout<<"error"<<endl;
      else cout<<"works fine"<<endl;
  }
  else if(pid>0)   //PARENT
  {
    int status;
    bool TLE=false;
    while (waitpid(pid, &status, WNOHANG) == 0) {
      if( get_cpu_usage()  > 2.0)
        {TLE=true;break;}
    }
      double run_time=get_cpu_usage();
      if(status!=0){
        sendResponse("RE",i,run_time,submission_id);
        cout<<"test case #"<<i<<": Runtime Error occured"<<endl;
     }
      else if(TLE)
      {
        sendResponse("TLE",i,run_time,submission_id);
        cout<<"test case #"<<i<<": TLE occured"<<endl;kill(pid,SIGSEGV);
      }
      else
      {

        FILE *fp1 = fopen(fout.c_str(), "r");
        FILE *fp2 = fopen(actual_output.c_str(), "r");
        if(!compareFiles(fp1,fp2))
        {
        sendResponse("WA",i,run_time,submission_id);
          cout<<"test case #"<<i<<": Wrong Answer"<<endl;
        }

        else
        {
          string URL=base_URL+"?verdict=AC&tno="+to_string(i)+"&run_time="+to_string(run_time)+"&submission_id="+submission_id;
          sendResponse("AC",i,run_time,submission_id);
          cout<<"test case #"<<i<<": Accepted -- "<<run_time<<endl;
        }
      }
  }
}
int main(int argc,char *argv[])  // command line ProblemId,no. of testcases
{

    if(argc<7){cout<<"arguments:= <out_file>  <problem_id> <no_of_testcases> <output_folder> <submission_id> <verdict_api_link>"<<endl;exit(0);}
    int t=atoi(argv[3]);
    problem_id=atoi(argv[2]);
    solution=argv[1];
    char* out_folder=argv[4];
    submission_id=string(argv[5]);
    base_URL=string(argv[6]);
    mkdir( out_folder , 0777);
    omp_set_dynamic(0);
    omp_set_num_threads(t);
    #pragma omp parallel
    {
      int test_id=omp_get_thread_num();
      test_id++;
      execute_test_case(test_id,out_folder);
    } //parralel

  return 0;
}
