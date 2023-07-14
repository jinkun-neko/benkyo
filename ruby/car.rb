class Car

  attr_accessor :name

  def initialize(name)
    @name = name
  end

  # def name =読み
  #   @name
  # end

  # def name=(name)＝書き
  #   @name = name
  # end

  def hello
    puts "Hello!#{@name}さん！"
  end

  def color(c)
    if c == 'red'
      puts "赤い車かっこいいよね！"
    elsif c == 'black'
      puts  "渋いねー！"
    elsif  c == 'green'
      puts "センスいい！！"
    end
  end
end

car = Car.new('jinkun')
print car.hello
print car.color('red')
car.name = "kunnkunn"
puts car.name