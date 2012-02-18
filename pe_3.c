#include <stdio.h>
#include <math.h>

int main(){
long long value, hf, root, i , j;
int is_prime;

printf("Enter a number : ");
scanf("%lld", &value);
hf = (value / 2);
printf("Prime factors : ");

for(i = 2; i <= hf ; i = i+2){
	if(i==4) --i;
	//if i is dvisible
	if(value % i == 0){
		hf = value / i;
		is_prime = 1;
		root = sqrt(i);
		//check up to root 
		for(j = 2; j <= root; ++j)
			if(i % j == 0) is_prime = 0;
			
		if(is_prime) printf("%lld ", i);
	}
}
printf("\n");
}
