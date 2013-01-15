#!/usr/bin/python

def sumMult(v, limit):
    sum = 0
    for i in range(0,limit,v):
        sum+=i
    return sum

print (sumMult(5, 1000) + sumMult(3, 1000) - sumMult(15, 1000))
