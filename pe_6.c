#include<stdio.h>
/*Question 6
 *Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */
int main(){
	int i,sum_os, sum_inc, sum_sq, 
	    num, answer;
	scanf("%d", &num);
	sum_os = 0;
	for(i = 1; i <= num; ++i)
		sum_os += i*i;

	sum_inc = (num >> 1)*(num+1);
	sum_sq = sum_inc * sum_inc;
	answer = sum_sq - sum_os;

	printf("%d\n", answer);
}
