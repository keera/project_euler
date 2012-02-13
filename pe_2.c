#include <stdio.h>
/*
 *Question 2
 *By considering the terms in the Fibonacci sequence whose values do not exceed  *four million
 *find the sum of the even-valued terms.
*/
int main(){
	int a, b, c, sum;

	a = 1;
	b = 2;
	sum = 0;

	while(a <= 4000000){
		if(a % 2 == 0) 
			sum+=a;
 
		c = a + b;
		a = b;
		b = c;
	}
 
	printf("%d\n", sum);
}
