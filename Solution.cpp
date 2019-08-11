// by 6 in a given range.
#include <bits/stdc++.h>
using namespace std;

// function to calculate the sum of
// all numbers divisible by 6 in range L-R..
int sum(int L, int R)
{
    // no of multiples of 6 upto r
    int p = R / 6;

    // no of multiples of 6 upto l-1
    int q = (L - 1) / 6;

    // summation of all multiples of 6 upto r
    int sumR = 3 * (p * (p + 1));

    // summation of all multiples of 6 upto l-1
    int sumL = (q * (q + 1)) * 3;

    // returns the answer
    return sumR - sumL;
}

// driver program to test the above function
int main()
{
  long long int t;
  cin>>t;
  while(t--){
    long long int L,R;
    cin>>L>>R;
    cout << sum(L, R)<<endl;}
    return 0;
}
