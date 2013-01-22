import java.math.BigInteger;
/*Question 25: What is the first term in the Fibonacci sequence to contain 1000 digits?*/
public class Question25 {

    public static int getFib(BigInteger a, BigInteger b, int count){
        if(b.toString().length() == 1000)
            return count;
        return getFib(b, a.add(b), count+1);
    }
    
    public static void main(String[] args) {
           int term = getFib(new BigInteger("0"), new BigInteger("1"), 1);
           System.out.println(term);
    }

}
