using System;

class Calculator
{
    static void Main()
    {
        double firstNum;
        double secondNum;
        string operation;
        double output = 0;

        Console.Write("Enter first value: ");
        firstNum = Convert.ToDouble(Console.ReadLine());

        Console.Write("Choose operation (+, -, *, /): ");
        operation = Console.ReadLine();

        Console.Write("Enter second value: ");
        secondNum = Convert.ToDouble(Console.ReadLine());

        if (operation == "+")
        {
            output = firstNum + secondNum;
        }
        else if (operation == "-")
        {
            output = firstNum - secondNum;
        }
        else if (operation == "*")
        {
            output = firstNum * secondNum;
        }
        else if (operation == "/")
        {
            if (secondNum == 0)
            {
                Console.WriteLine("Cannot divide by zero.");
                return;
            }

            output = firstNum / secondNum;
        }
        else
        {
            Console.WriteLine("Invalid operation.");
            return;
        }

        Console.WriteLine("Answer: " + firstNum + " " + operation + " " + secondNum + " = " + output);
    }
}