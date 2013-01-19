git config --global user.name promotion-portoetenvirons
git config --global user.email promotion.portoetenvirons@gmail.com
git add downloads/ images/ _includes/ _site/
git add _layouts/ _posts/ javascripts/
git add stylesheets/ index.html _config.yml
git commit -a -m "changement style small device"
#git remote add promotionporto https://github.com/promotion-portoetenvirons/promotion-portoetenvirons.github.com.git
git push -u promotionporto master
