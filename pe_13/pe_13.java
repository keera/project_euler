import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class pe_13 {
	
	public static void main(String[] args) throws FileNotFoundException{
	
		String digits = "";
		int carry_over = 0;
		
		//begin at end using carry over arithmetic
		for(int i = 50 ; i > 0 ; i--){
			Scanner value = new Scanner (new FileInputStream("src.txt"));
			
			int sum = 0; 
			String sum_str = "";
			//sum the values from lines 1 - 100
			while(value.hasNextLine()){
				String line =  value.next();
				//get the first value
				String fv = line.substring(i-1,i);
				sum += Integer.parseInt(fv);
			}
			//once complete, add the carry over
			sum = sum + carry_over;
			carry_over = getCarry(sum);
			//append ones place to digit
			sum_str = sum + "";
			digits =  sum_str.substring(sum_str.length()-1,sum_str.length()) + digits;
		}
		
		//add the last carry over
		digits = carry_over + digits;
		System.out.println("Digits : " + digits);
	}
	
	public static int getCarry(int sum){
		
		if(sum >= 10){
			String val = sum + "";
			String carry_str = val.substring(0,val.length()-1);
			int carry_int = Integer.parseInt(carry_str);
			return carry_int;
		}else
			return 0;
		
	}
}
