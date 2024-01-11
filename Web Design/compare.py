import sys
import json

l = sys.argv[1]
l = '"' + l[1:-1] + '"'
b = eval(str(l))
c = eval(b)
res = []
for i in c:
    res.append([(i[2] - i[1]) * 100 / i[1], i[0]])
res.sort(reverse=True)
for i in range(len(res)):
    sym = '+' if res[i][0] > 0 else ''
    res[i] = [f'{sym}{res[i][0]}%', res[i][1]]
    
s = json.dumps(res)
print(s)
