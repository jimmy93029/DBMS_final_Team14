import pandas as pd

# 公司名稱列表
company_names = ['APPLE', 'AMAZON', 'META', 'GOOGLE', 'NETFLIX']

# 將公司名稱按字典序排序
company_names.sort()

# 建立DataFrame
company_df = pd.DataFrame({
    'Company_id': range(1, len(company_names) + 1),
    'Company_name': company_names
})

# 將結果寫入新的CSV檔案
output_file = 'Company.csv'
company_df.to_csv(output_file, index=False)

print(f'{output_file} 檔案建立完成')
