def sumDivisible(L, R):

    # no of multiples of 6 upto r
    p = int(R/6)

    # no of multiples of 6 upto l-1
    q = int((L-1)/6)

    # summation of all multiples of 6 upto r
    sumR = 3 * (p * (p + 1))

    # summation of all multiples of 6 upto l-1
    sumL = (q * (q + 1)) * 3

    # returns the answer
    return sumR - sumL

# driver code
t=int(input())
for _ in range(t):
    l=[int(x) for x in input().split()]
    L=l[0]
    R=l[1]
    print(sumDivisible(L,R))
