
import java.util.Random;
import java.util.Scanner;

public class GuessNumber {
    public static void main(String[] args) {

        int score = 100;
        // ใช้ try-with-resources เพื่อปิด scanner อัตโนมัติ
        try (Scanner scanner = new Scanner(System.in)) {
            Random rand = new Random();
            int targetNumber = rand.nextInt(100) + 1; // สุ่ม 1-100
            int playerGuess;
            boolean isCorrect = false;

            while (!isCorrect) { 
                System.out.print("Please guess number (1-100): ");
                playerGuess = scanner.nextInt();

                if (playerGuess > targetNumber) {
                    System.out.println("Too much!");
                    score--;
                } else if (playerGuess < targetNumber) {
                    System.out.println("Too little!");
                    score--;
                } else {
                    isCorrect = true;
                }
            }

            System.out.println("Congratulations!");
            System.out.println("Your score is: " + score);
        } catch (Exception e) {
            System.out.println("Error: " + e.getMessage());
        }
    }
}