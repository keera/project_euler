#!/usr/bin/python 
f = open('names.txt', 'r')
names = sorted(f.read().replace('"',"").split(","))
print sum(((sum((ord(a)+1 - ord('a')) for a in names[i].strip().lower()))*(i+1)) for i in range(len(names)))
