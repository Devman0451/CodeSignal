def evenDigitsOnly(n):
    return sum([int(i)%2 for i in str(n)]) == 0