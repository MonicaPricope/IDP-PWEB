FROM jenkins/jenkins:lts 
USER root

RUN apt-get update
RUN apt-get install docker.io docker-compose -y

USER jenkins
ENV JAVA_OPTS="-Djenkins.install.runSetupWizard=false"
ENV JENKINS_USER jenkins
ENV JENKINS_PASS jenkins
COPY plugins.txt /usr/share/jenkins/ref
COPY default-user.groovy /usr/share/jenkins/ref/init.groovy.d/
RUN /usr/local/bin/install-plugins.sh < /usr/share/jenkins/ref/plugins.txt
