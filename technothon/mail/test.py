for i in range(11,16):
	if i%2==0:
		print('Jack')
	elif i%3==0:
		print('Jill')
	elif i%2==0 and i%3==0:
		print('Jack and Jill')
	else:
		print('Jill and Jack')