import random as ra
t=int(raw_input())
L=int(input())
print(t)
for _ in range(t):
    l=ra.randrange(1,L/2)
    r=ra.randrange(L/2,L)
    if(l<r):
     print l,r
