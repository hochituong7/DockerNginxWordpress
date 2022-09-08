# Training Wordpress

* Include `docker-compose.yml` to this repository.
* Everyone launch server with `docker-compose up` on local device if we get source code from this repository.
* Everyone find out result page on local device web browser.
* Use `PHP7`, `Wordpress`, `Nginx`, `MySQL`.
* Add the necessary information to the `README.md`. The testers can launch the docker locally and describe it so that it can be viewed in a browser.


# Goal
* Help you understand how to build a website from scratch with wordpress.
* Help you understand how to optimize your website according to the latest trends
* Help you get acquainted with the data analysis tool of google

# Topic
Build a website in your style (creative freedom) with any content. Suggested contents below:
- Personal introduction blog.
- Blog about the company MEVN.
- Blog about a certain startup that you have an idea.
- Blog about the projects that MEVN is implementing.
- Blog about Re-use activities.

# Deliverable image

![New Project](https://user-images.githubusercontent.com/57971641/186302472-5928b9bd-c24d-4a59-86bf-b3f41d29bb30.png)


* The design of the deliverables does not matter, but those that are too rough are NG. You can use any JS & CSS framework you like.
* Data should be persistent. The final data should be displayed even if it is accessed from another device.
* Use English instead of Japanese in the UI.


# Training flow

1. Picking and moving to KANBAN, Move to `in Development` in Projects/Startup.
2. Creating and developing git branches around KANBAN. The name of the git branch should be the number of the issue to be developed. For example, `issue-3`.
3. Develop it.
4. Notify with pull request when developping completed. In the pull request, be specific about what the tester should be testing.
5. KANBAN Move to `Waiting for verification`.
6. Tester performs test. You may proceed with the development of another KANBAN during the test.
6. If validation completes successfully, it is merged into master. If there are any deficiencies, the pull request and KANBAN will be returned.

# Run app

1. Clone source from github by command: 
```
    git clone git@github.com:marketenterprise/Training-Pair2-20220809-Wordpress.git
```

```
    cd Training-Pair2-20220809-Wordpress
```

3. Run app by docker-compose
```
    docker-compose up
```

### Check List
- You can access app with: http://localhost
