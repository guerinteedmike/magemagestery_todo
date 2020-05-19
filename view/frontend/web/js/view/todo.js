define([
  'uiComponent',
  'jquery',
  'Magento_Ui/js/modal/confirm',
  'Guerinteed_Todo/js/service/task'
], function (Component, $, modal, taskService) {
  'use strict';

  //console.log("Mikeg Was Here!!");
  return Component.extend({
    defaults: {
      newTaskLabel: '',
      buttonSelector: '#add-new-task-button',
      tasks: []
    },

    initObservable: function () {
      this._super().observe(['tasks', 'newTaskLabel']);
      //this.tasks().push({label: 'Task 5'});

      var self = this;
      taskService.getList().then(function (tasks) {
        self.tasks(tasks);
      });
      return this;
    },

    switchStatus: function (data, event) {
      const taskId = $(event.target).data('id');

      var items = this.tasks().map(function (task) {
        if (task.task_id === taskId) {
          task.status = task.status === 'open' ? 'complete' : 'open';
          taskService.update(taskId, task.status);
        }
        return task;
      });
      this.tasks(items);
    },

    deleteTask: function (taskId) {
      var self = this;

      modal({
        content: 'Are you sure you want to delete the task?',
        actions: {
          confirm: function () {
            var tasks = [];

            taskService.delete(self.tasks().find(function (task) {
              if (task.task_id === taskId) {
                return task;
              }
            }));

            if (self.tasks().length === 1) {
              self.tasks(tasks);
              return;
            }

            self.tasks().forEach(function (task) {
              if (task.task_id !== taskId) {
                tasks.push(task);
              }
            });
            self.tasks(tasks);
          }
        }
      });
    },

    addTask: function() {
      this.tasks.push({
        id: Math.floor(Math.random() * 100),
        label: this.newTaskLabel(),
        status: false
      });
      this.newTaskLabel('');
    },

    checkKey: function (data, event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        $(this.buttonSelector).click();
      }
    }

  });
});
