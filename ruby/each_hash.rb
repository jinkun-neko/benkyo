scores = {jinkun: 100,sumire:20, michiko:50}

scores.each do |k,v|
  if v >= 80 
    puts " #{v}点おめでとう！#{k}さん！"
  end
end