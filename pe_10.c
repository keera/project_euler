#include<stdio.h>
#include<math.h>
#define TRUE 1
#define FALSE 0
/*Question 10
 *Find the sum of all the primes below two million
 */
int main(){

	int size = 2000000;
	int primes[size];
	int i, j;
	long long sum_of_primes;

	for(i = 0; i <= size; i++) 
		primes[i] = TRUE;

	for(i = 2; i <= sqrt(size); i++){
		if(primes[i] == TRUE){
			for(j = i*2; j <= size; j+=i) 
				primes[j] = FALSE;
		}
	}

	sum_of_primes = 0;

	for(i = 2; i <= size; i++){
		if(primes[i] == TRUE)
			sum_of_primes += i;
	}

	printf("The sum of primes is : %lld\n", sum_of_primes);
}
