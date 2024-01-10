import matplotlib.pyplot as plt
import sys
import yfinance as yf  # You can use yfinance to fetch historical stock data


company = sys.argv[1]
date1 = sys.argv[2]
date2 = sys.argv[3]

# Fetch historical stock data using yfinance
stock_data = yf.download(company, start=date1, end=date2)

# Plotting the closing prices
plt.figure(figsize=(10, 6))
plt.plot(stock_data['Close'], label=f'{company} Closing Prices')
plt.title(f'{company} Stock Prices ({date1} to {date2})')
plt.xlabel('Date')
plt.ylabel('Closing Price')
plt.legend()
plt.grid(True)

plt.savefig("C:/Users/cheng/Desktop/vscode/database/Web Design/query_fig.png")
