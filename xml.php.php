using System;

class Program
{
    static void Main()
    {
        // Step 1: Ask for the user's name
        Console.Write("Enter your name: ");
        string name = Console.ReadLine();
        Console.WriteLine($"Hello {name}");

        // Step 2: Ask for the user's birth month, date, and year
        Console.Write("Enter your birth month (MM): ");
        int month = int.Parse(Console.ReadLine());

        Console.Write("Enter your birthdate (DD): ");
        int day = int.Parse(Console.ReadLine());

        Console.Write("Enter your birth year (YYYY): ");
        int year = int.Parse(Console.ReadLine());

        // Step 3: Determine if the year is a leap year
        bool isLeapYear = DateTime.IsLeapYear(year);
        string leapYearStatus = isLeapYear ? "a leap year" : "not a leap year";
        Console.WriteLine($"You were born in {year}, which is {leapYearStatus}.");

        // Step 4: Determine the user's generation based on the birth year
        string generation = GetGeneration(year);
        Console.WriteLine($"You are a {generation}.");
    }

    // Function to determine the generation based on the year
    static string GetGeneration(int birthYear)
    {
        if (birthYear < 1946)
            return "The Builders (Born before 1946)";
        else if (birthYear >= 1946 && birthYear <= 1964)
            return "Baby Boomers (Born 1946-1964)";
        else if (birthYear >= 1965 && birthYear <= 1979)
            return "Generation X (Born 1965-1979)";
        else if (birthYear >= 1980 && birthYear <= 1994)
            return "Generation Y (Born 1980-1994)";
        else if (birthYear >= 1995 && birthYear <= 2009)
            return "Generation Z (Born 1995-2009)";
        else if (birthYear >= 2010 && birthYear <= 2024)
            return "Generation Alpha (Born 2010-2024)";
        else if (birthYear >= 2025 && birthYear <= 2039)
            return "Generation Beta (Born 2025-2039)";
        else
            return "Unknown Generation";
    }
}
