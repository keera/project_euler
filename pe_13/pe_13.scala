object pe_13 {
 
	def main(args: Array[String]){

	  var digits:String = ""
	  var carry_over:Int = 0
	  
	  for(i <- 50 to 1 by -1){
		  var sum:Int = 0; 
	  	  var sum_str:String = ""
	      val file = io.Source.fromFile("hello.txt") 
	      
	      file.getLines.foreach((line) => {  
                var fv:String = line.substring(i-1,i)
                sum += Integer.parseInt(fv)
           }) 
           
          sum = sum + carry_over
		  carry_over = getCarry(sum)
		  //append ones place to digit
		  sum_str = sum + "";
		  digits =  sum_str.substring(sum_str.length()-1,sum_str.length()) + digits
	  }
	  
	  //add the last carry over
		digits = (carry_over + digits).substring(0,10)
		println("Digits : " + digits)
	}
	
	def getCarry(sum:Int): Int = {
		
		if(sum >= 10){
			var value:String = sum + ""
			var carry_str:String = value.substring(0,value.length()-1)
			var carry_int:Int = Integer.parseInt(carry_str)
			return carry_int
		}else
			return 0
		
	}
}