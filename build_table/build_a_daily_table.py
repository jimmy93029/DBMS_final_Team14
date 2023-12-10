import pandas as pd

def makeFile(a):
    # 讀取公司資訊檔案 Company.csv
    company_df = pd.read_csv('Company.csv')

    # 選擇公司名稱為'a'的公司
    a_company = company_df[company_df['Company_name'] == a]

    # 讀取日期資訊檔案 Date.csv
    date_df = pd.read_csv('Date.csv')

    # 讀取原始 a 資訊檔案 a.csv
    a_df = pd.read_csv(a + '.csv')

    # 將日期對應到對應的 Date_id
    merged_df = pd.merge(a_df, date_df, left_on='Date', right_on='Date_day')

    # 新增 Company_id 到 merged_df 中
    merged_df['Company_id'] = a_company['Company_id'].values[0]

    # 選擇需要的欄位
    result_df = merged_df[['Company_id', 'Date_id', 'Open', 'High', 'Low', 'Close', 'Adj Close', 'Volume']]

    # 將結果寫入新的 CSV 檔案
    output_file = a + '_daily_table.csv'
    result_df.to_csv(output_file, index=False)

    print(f'{output_file} 檔案建立完成')

makeFile('AMAZON')
makeFile('APPLE')
makeFile('META')
makeFile('NETFLIX')
makeFile('GOOGLE')
