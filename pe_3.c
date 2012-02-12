#include <stdio.h>
#include <math.h>
/*Question 3:
 *The prime factors of 13195 are 5, 7, 13 and 29.
 *What is the largest prime factor of the number 600851475143?
 */
int main(){
long long value, hf, root, i , j;
int is_prime;

printf("Enter a number : ");
scanf("%lld", &value);
hf = (value / 2);
printf("Prime factors : ");

for(i = 2; i <= hf ; i = i+2){
	if(i==2) ++i;
	if(value % i == 0){
		hf = value / i;
		is_prime = 1;
		root = sqrt(i)+1;
		 
		for(j = 2; j < root; ++j){
			if(i % j == 0) is_prime = 0;
		}	
		if(is_prime)
			printf("%lld ", i);
	}
}
printf("\n");
}
