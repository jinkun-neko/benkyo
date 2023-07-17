class AnswersController < ApplicationController

  def create
    @question = Question.find(params[:question_id])
    @question.answers.create(answer_params)
  end

  def destroy
  end

  private
  
  def answer_params
    
  end
end
