# BE-Project

git config --global user.name PKarpe
git config --global user.email "email@gmail.com"
touch .gitignore
git init
git add .
git commit -m "Initial Commit"
git status # Just to see
ssh -keygen -t rsa -b 4096 -C "email@gmail.com"
tail <path to id_rsa.pub> # Add this key to your Github account.
get remote add origin <ssh url.git>
git push origin master
