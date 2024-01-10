<<<<<<< HEAD
import yfinance as yf
import sys
import pandas as pd
def makeFile(a, num):
    # 讀取日期資訊檔案 Date.csv
    date_df = pd.read_csv('C://Users//cheng//Desktop//vscode//database//build_table//Date.csv')

    # 讀取原始 a 資訊檔案 a.csv
    a_df = pd.read_csv(f"C://Users//cheng//Desktop//vscode//database//build_table//{a}.csv")

    # 將日期對應到對應的 Date_id
    merged_df = pd.merge(a_df, date_df, left_on='Date', right_on='Date_day')

    # 新增 Company_id 到 merged_df 中
    merged_df['Company_id'] = num

    # 選擇需要的欄位
    result_df = merged_df[['Company_id', 'Date_id', 'Open', 'High', 'Low', 'Close', 'Adj Close', 'Volume']]

    # 將結果寫入新的 CSV 檔案
    output_file = a + '_daily_table.csv'
    result_df.to_csv(f'C://Users//cheng//Desktop//vscode//database//build_table//{output_file}', index=False)

    print(f'{output_file} 檔案建立完成')

company_t = sys.argv[1]
company = sys.argv[2]
num = sys.argv[3]
print(company, company_t)
company = company.upper()
df=yf.download (company_t, start='2012-12-10', end='2021-12-10')
df.to_csv(f'C://Users//cheng//Desktop//vscode//database//build_table//{company}.csv')
=======
import yfinance as yf
import sys
import pandas as pd
def makeFile(a, num):
    # 讀取日期資訊檔案 Date.csv
    date_df = pd.read_csv('C://Users//cheng//Desktop//vscode//database//build_table//Date.csv')

    # 讀取原始 a 資訊檔案 a.csv
    a_df = pd.read_csv(f"C://Users//cheng//Desktop//vscode//database//build_table//{a}.csv")

    # 將日期對應到對應的 Date_id
    merged_df = pd.merge(a_df, date_df, left_on='Date', right_on='Date_day')

    # 新增 Company_id 到 merged_df 中
    merged_df['Company_id'] = num

    # 選擇需要的欄位
    result_df = merged_df[['Company_id', 'Date_id', 'Open', 'High', 'Low', 'Close', 'Adj Close', 'Volume']]

    # 將結果寫入新的 CSV 檔案
    output_file = a + '_daily_table.csv'
    result_df.to_csv(f'C://Users//cheng//Desktop//vscode//database//build_table//{output_file}', index=False)

    print(f'{output_file} 檔案建立完成')

company_t = sys.argv[1]
company = sys.argv[2]
num = sys.argv[3]
print(company, company_t)
company = company.upper()
df=yf.download (company_t, start='2012-12-10', end='2021-12-10')
df.to_csv(f'C://Users//cheng//Desktop//vscode//database//build_table//{company}.csv')
>>>>>>> f6c6e2b5cd3853a415d193db0f870820b5fc5a1b
makeFile(company, num)