(function(){ 'use strict';

function User(Api){

  var model = {};
  var type = 'users';

  /**
   * Get all data
   * @param {String} uuid
   * @return {Object}
   */
  model.list = function(uuid){
    return Api.get(type, uuid);
  }

  /**
   * Get data
   * @param {String} uuid
   * @return {Object}
   */
  model.get = function(uuid){
    return Api.get(type, uuid);
  }

  /**
   * Add new item
   * @param {Object} data
   * @return {Object}
   */
  model.add = function(data){
    return Api.add(type, data);
  }

  /**
   * Update item data
   * @param {String} uuid
   * @param {Object} data
   * @return {Object}
   */
  model.update = function(uuid, data){
    return Api.update(type, uuid, data);
  }

  /**
   * Upload item data
   * @param {String} uuid
   * @param {Object} data
   * @param {Object} files
   * @return {Object}
   */
  model.upload = function(uuid, data, files){
    return Api.upload(type, uuid, data, files);
  }

  /**
   * Delete item
   * @param {String} uuid
   * @return {Object}
   */
  model.delete = function(uuid){
    return Api.delete(type, uuid);
  }

  return model;
}

User.$inject = ['Api'];

APP.service('User', User);

})();
