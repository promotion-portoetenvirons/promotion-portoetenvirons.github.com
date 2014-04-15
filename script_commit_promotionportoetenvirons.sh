git config --global user.name promotion-portoetenvirons
git config --global user.email promotion.portoetenvirons@gmail.com
git add downloads/ images/ _includes/ _site/
git add _layouts/ _posts/ javascripts/ php/
git add stylesheets/ index.html _config.yml script_clone_promotionportoetenvirons.sh script_commit_promotionportoetenvirons.sh
git commit -a -m "correctif mise a jour adresse"
#git remote add origin https://github.com/promotion-portoetenvirons/promotion-portoetenvirons.github.com.git
git push -u origin master
