# include .bashrc if it exists
if [ -f "$HOME/.bashrc" ]; then
    . "$HOME/.bashrc"
fi

alias  psa = 'php artisan serve'
alias  c = 'clear'
alias  e = 'exit'
