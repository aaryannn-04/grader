#include<bits/stdc++.h>
using namespace std;
int main()
{
  int t;
  cin>>t;
  while(t--)
  {
    int l,r;
    cin>>l>>r;
    long int sum=0;
    while(l<=r)
    {
      if(l%6==0)sum+=l;
      l++;
    }
    cout<<sum<<endl;
  }
 return 0;
}
