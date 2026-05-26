echo "# cedano-herramientas" >> README.md
git init
git config --local user.name "Oscar Cedano"
git config --local user.email "cedano@engineer.com"
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:iam-cedano/cedano-herramientas.git
git push -u origin main