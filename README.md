# Grader to API
Grader to run a c++ program against some test cases parallelly using OpenMP library  and sends the verdict to your API using http GET data.

# Usage
  **1.)compile the grader.cpp and get an out file**
  
    g++ grader.cpp -fopenmp -lcurl -o grader.out
    git status
    
  **2.)Keep All the input test cases in the problems/input/<porblem_id> folder with file name as 1.in,2.in and so on**
  
      problems
              |->16   
                  |->input
                           |->1.in
                              2.in
                              3.in
                              .
                              .
         16 here is the problem_id
          
  **3.)Keep All the output of the test cases in the problems/output/<problem_id> folder with file name as 1.out,2.out and so on**
  
       problems
              |->16       
                  |->output
                           |->1.in
                              2.in
                              3.in
                              .
                              .
                              
        16 here is the problem_id
   
   
   **4.)Run the grader using ./grader.out and passing following command line arguments**.
   
           <out_file>         :- provide the location to the .out file on which test cases are to be run.
           <problem_id>       :- problem_id of the question.
           <no_of_test_cases> : Number of test cases in the problem input folder
           <output_folder>    :path to the folder where the output of the given code will be stored.(not the problem output folder).
           <submission_id>    :unique_id of this submission
           <verdict_api_link> :Base url of the server where the GET data has to be send
           
           Example usage:  ./grader.out solution.out 16 10 output/sikander441/ jh3jjk123hjk12b3hj http://127.0.0.1:3000/submit/verdict
           
  # API call    
  #### It return the following arguments using GET method to the provided link 
      Argument_name                  Possible Values
      
      verdict                         AC,WA,RE,TLE
      run_time                        runtime in seconds.
      tno                             test_no
      submission_id                   submission_id
      
      
   # Example
   
   ## Grader Ouput:
   ![Grader output](/screenshots/Grader.png)
   
   #### NodeJs Api output
   ![node_output](/screenshots/NodeJs_APi.png)
   
   #### NodeJs Sample Code
   ![node_output](/screenshots/Node_js_code.png)

   
   
   
