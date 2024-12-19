import random

def number_guessing_game():
    print("\n--- Number Guessing Game ---")
    number_to_guess = random.randint(1, 100)
    attempts = 0

    while True:
        try:
            guess = int(input("Guess a number between 1 and 100: "))
            attempts += 1
            if guess < number_to_guess:
                print("Too low!")
            elif guess > number_to_guess:
                print("Too high!")
            else:
                print(f"Congratulations! You guessed it in {attempts} attempts.")
                break
        except ValueError:
            print("Please enter a valid number.")

def math_quiz():
    print("\n--- Math Quiz ---")
    score = 0
    for _ in range(5):
        a, b = random.randint(1, 10), random.randint(1, 10)
        answer = a + b
        guess = int(input(f"What is {a} + {b}? "))
        if guess == answer:
            print("Correct!")
            score += 1
        else:
            print(f"Wrong! The answer is {answer}.")
    print(f"You scored {score}/5.")

def word_scramble():
    print("\n--- Word Scramble ---")
    words = ["python", "program", "code", "fun", "game"]
    word = random.choice(words)
    scrambled = ''.join(random.sample(word, len(word)))
    guess = input(f"Unscramble the word: {scrambled}: ")

    if guess.lower() == word:
        print("Correct!")
    else:
        print(f"Wrong! The correct word was {word}.")

def rock_paper_scissors():
    print("\n--- Rock-Paper-Scissors ---")
    options = ["rock", "paper", "scissors"]
    computer_choice = random.choice(options)
    user_choice = input("Choose rock, paper or scissors: ").lower()

    if user_choice == computer_choice:
        print(f"It's a tie! We both chose {computer_choice}.")
    elif (user_choice == "rock" and computer_choice == "scissors") or \
         (user_choice == "paper" and computer_choice == "rock") or \
         (user_choice == "scissors" and computer_choice == "paper"):
        print(f"You win! {user_choice} beats {computer_choice}.")
    else:
        print(f"You lose! {computer_choice} beats {user_choice}.")

def hangman():
    print("\n--- Hangman ---")
    words = ["python", "program", "code", "fun", "game"]
    word = random.choice(words)
    guessed = "_" * len(word)
    attempts = 6

    while attempts > 0 and "_" in guessed:
        print(f"Word: {guessed}")
        guess = input("Guess a letter: ").lower()
        if guess in word:
            guessed = ''.join([c if c == guess or c in guessed else '_' for c in word])
            print("Good guess!")
        else:
            attempts -= 1
            print(f"Wrong guess! Attempts left: {attempts}")

    if "_" not in guessed:
        print(f"Congratulations! You've guessed the word: {word}.")
    else:
        print(f"Game over! The word was: {word}.")

def simple_trivia():
    print("\n--- Simple Trivia ---")
    questions = {
        "What is the capital of France?": "paris",
        "What color do you get when you mix red and white?": "pink",
        "How many legs does a spider have?": "8",
        "What is the largest ocean on Earth?": "pacific",
        "What planet is known as the Red Planet?": "mars"
    }
    score = 0

    for question, answer in questions.items():
        guess = input(question + " ").lower()
        if guess == answer:
            print("Correct!")
            score += 1
        else:
            print(f"Wrong! The correct answer is {answer}.")
    print(f"You scored {score}/{len(questions)}.")

def main():
    games = {
        "1": number_guessing_game,
        "2": math_quiz,
        "3": word_scramble,
        "4": rock_paper_scissors,
        "5": hangman,
        "6": simple_trivia,
    }

    while True:
        print("\n--- Choose a game to play ---")
        print("1. Number Guessing Game")
        print("2. Math Quiz")
        print("3. Word Scramble")
        print("4. Rock-Paper-Scissors")
        print("5. Hangman")
        print("6. Simple Trivia")
        print("7. Exit")
        
        choice = input("Enter the number of your choice: ")
        if choice == "7":
            print("Thanks for playing! Goodbye!")
            break
        elif choice in games:
            games[choice]()
        else:
            print("Invalid choice. Please try again.")

if __name__ == "__main__":
    main()
