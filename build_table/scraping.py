import yfinance as yf

# 下載股價資料
df=yf.download ("AAPL", start='2012-12-10', end='2021-12-10')
# 匯出成 CSV 檔案
df.to_csv('APPLE.csv')
print("CSV檔案已匯出")

# 下載股價資料
df=yf.download ("META", start='2012-12-10', end='2021-12-10')
# 匯出成 CSV 檔案
df.to_csv('META.csv')
print("CSV檔案已匯出")


# 下載股價資料
df=yf.download ("AMZN", start='2012-12-10', end='2021-12-10')
# 匯出成 CSV 檔案
df.to_csv('AMAZON.csv')
print("CSV檔案已匯出")

# 下載股價資料
df=yf.download ("GOOG", start='2012-12-10', end='2021-12-10')
# 匯出成 CSV 檔案
df.to_csv('GOOGLE.csv')
print("CSV檔案已匯出")

# 下載股價資料
df=yf.download ("NFLX", start='2012-12-10', end='2021-12-10')
# 匯出成 CSV 檔案
df.to_csv('NETFLIX.csv')
print("CSV檔案已匯出")
