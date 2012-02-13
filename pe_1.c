#include <stdio.h>
/*Question 1
 *Add all the natural numbers below one thousand that are multiples of 3 or 5
 */
int main(){
	int number, answer;
	number = 1000;
	answer = sumVal(number) - number;
	printf("%d\n", answer);
}

int sumVal(int num) {
	int sum;
	sum = 0;
	if (num == 3)
		return num;
	else {
		if (num % 3 == 0 || num % 5 == 0)
			sum = num + sumVal(num - 1);
		else
			sum += sumVal(num - 1);
	
	}
	return sum;
}


