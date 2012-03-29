#include<stdio.h>
/*Question: 
 *How many routes are there through a 20x20 grid?
*/

int main(){
int size, i , j;
scanf("%d",&size);
printf("\n");
long long grid[size][size];

for(i = 0; i < size; i++){
	for(j = 0; j < size; j++){
		if(i != 0 && j !=0 ){
			grid[i][j] = grid[i][j-1] + grid[i-1][j];	
		}else{
			if(i == 0)
				grid[i][j] = j+2;
			if(j ==0)
				grid[i][j] = i+2;
		}
	}
}

printf("%lld\n", grid[size-1][size-1]);
}
