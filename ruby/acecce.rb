class User
  def initialize(name)
    @name = name
  end

  private

  def hello
    puts "Hello! I am #{@name}."
  end

  def hello2
  end
end

nakata = User.new('nakata')
nakata.hello #外部呼び出し禁止。内部だけで使うメソッドだけ使う。セキュリティ関係。