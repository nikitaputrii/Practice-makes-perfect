# t & t == t
# t & f == f
# f & t == f
# f & f == f

hour = 7
if hour > 6 and hour < 8 :
    print('Good morning!') #prints : Good morning!


# t or t == t
# t or f == t
# f or t == t
# f or f == f

hour = 12
if hour == 11 or hour == 12 :
    print('Lunchtime!') #prints : Lunchtime!


hour = 9
if not hour == 12 :
    print('Not noon') #prints : Not noon


x = 20
# if x ranges from 10 to 30 inclusive, print 'x ranges from 10 to 30'
if x >= 10 and x <= 30 :
  print('x ranges from 10 to 30')

y = 60
# if y is less than 10 or greater than 30, print 'y is less than 10 or greater than 30'
if y < 10 or y > 30 :
  print('y is less than 10 or greater than 30')

z = 55
# if z is not equal to 77, print 'z is not 77'
if not z == 77 :
  print('z is not 77')