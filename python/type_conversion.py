price = 3
print('The apple costs ' + price + 'dollars')  
#prints : typeError

price = 3
print('The apple costs ' + str(price) + ' dollars')
#prints : The apple costs 3 dollars

count = '3'
price = 100
total_price = price * int(count)
print(total_price)
#prints : 300


# u can't concatenate strings and integers because they have different data types


age = 24
# Print 'I am 24 years old' using the age variable
print('I am ' + str(age) + ' years old')

count = '5'
# Convert the count variable to an integer data type, add 1 to it, and print it
sum = int(count) + 1
print(sum)