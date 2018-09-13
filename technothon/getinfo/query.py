import pandas as pd
import csv
l=pd.read_csv("test.csv",skipinitialspace=True,usecols=['Name','Roll Number','Branch Name','Semester','Mail id','Mobile no'],index_col=0)
l.to_csv('test2.csv', sep=',')
with open('test2.csv', 'r') as csvfile:
	spamreader = csv.reader(csvfile, delimiter=',')
	for row in spamreader:
		print(f"""INSERT INTO `s_info`(`rollno`, `name`, `branch`, `sem`, `email`, `contact`) VALUES ('{row[1]}','{row[0]}','{row[2]}',{row[3]},'{row[4]}','{row[5]}');""")
	