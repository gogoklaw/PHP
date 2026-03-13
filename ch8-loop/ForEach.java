import java.util.Scanner;
public class ForEach {
    public static void main(String[] args) {

        //for loop
        double[] scores = {85.5, 92.0 , 78.5};
        for (int i = 0; i < scores.length; i++){
            System.out.println(scores[i]);
        }
        
        for (double score : scores ){
            System.out.println(score);
        }
    }
    
}
