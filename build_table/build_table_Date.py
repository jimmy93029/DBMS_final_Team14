import pandas as pd

# 讀取APPLE_daily_table.csv檔案
input_file = 'APPLE.csv'
df = pd.read_csv(input_file)

# 將日期排序
df['Date'] = pd.to_datetime(df['Date'])
df = df.sort_values('Date').reset_index(drop=True)

# 新增Date_id欄位
df['Date_id'] = df.index + 1

# 選擇需要的欄位，並將 'Date' 欄位改為 'Date_day'
result_df = df[['Date_id', 'Date']].rename(columns={'Date': 'Date_day'})

# 將結果寫入新的CSV檔案
output_file = 'Date.csv'
result_df.to_csv(output_file, index=False)

print(f'{output_file} 檔案建立完成')
