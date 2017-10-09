{{-- git config --}}
git config --global user.name "larigyn"
git config --global user.email androidagay@gmail.com

{{-- git list --}}
git config --list

{{-- git initialized --}}
git init

{{-- git status --}}
git status

git add (filename)
git add . (all files)


{{-- git push --}}
git remote add origin https://github.com/larigyn/laratrust.git
git push -u origin master


{{-- if changes occur --}}
git add .
git commit -m "changes added"
git push 

{{-- ssh key--}}
ssh-keygen -t rsa -b 4096 -C "androidagay@gmail.com"
(enter)
(password)
(password)
eval "$(ssh-agent -s)"
ssh-add ~/.ssh/id_rsa
(password)

Goto your account
(clip < ~/.ssh/id_rsa.pub) {{-- for windows only --}}

{{-- pushing another repo --}}
git remote -v {{-- check first --}}
git remote rm origin
git remote add origin (your repo)