class User
  def initialize(name)
    @name = name
  end

  def hello
    puts "Hello! I am #{@name}."
  end
end

nakata = User.new('nakata')
nakata.hello

class AdminUser < User
  def admin_hello
    puts "Hello! I am #{@name} from AdominUser."
  end
end

jin = AdminUser.new('jin')
jin.admin_hello