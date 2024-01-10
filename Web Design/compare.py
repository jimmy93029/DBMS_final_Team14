import sys
import json

l = sys.argv[1]
l = '"' + l[1:-1] + '"'
b = eval(str(l))
c = eval(b)
res = []
for i in c:
    res.append([(i[2] - i[1]) / i[1], i[0]])
res.sort(reverse=True)
for i in range(len(res)):
    sym = '+' if res[i][0] > 0 else '-'
    k1 = int(str(res[i][0])[2:4]) if res[i][0] > 0 else int(str(res[i][0])[3:5])
    k2 = str(res[i][0])[5:] if res[i][0] > 0 else str(res[i][0])[6:]
    res[i] = [f'{sym}{k1}.{k2}%', res[i][1]]
    
s = json.dumps(res)
print(s)
