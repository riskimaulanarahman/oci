import { paramsList } from './params-list';
import { isObject } from './utils';

function getChangedParams(swiperParams, oldParams, children, oldChildren) {
  var keys = [];
  if (!oldParams) return keys;

  var addKey = function addKey(key) {
    if (keys.indexOf(key) < 0) keys.push(key);
  };

  var oldChildrenKeys = oldChildren.map(function (child) {
    return child.key;
  });
  var childrenKeys = children.map(function (child) {
    return child.key;
  });
  if (oldChildrenKeys.join('') !== childrenKeys.join('')) addKey('children');
  if (oldChildren.length !== children.length) addKey('children');
  var watchParams = paramsList.filter(function (key) {
    return key[0] === '_';
  }).map(function (key) {
    return key.replace(/_/, '');
  });
  watchParams.forEach(function (key) {
    if (key in swiperParams && key in oldParams) {
      if (isObject(swiperParams[key]) && isObject(oldParams[key])) {
        var newKeys = Object.keys(swiperParams[key]);
        var oldKeys = Object.keys(oldParams[key]);

        if (newKeys.length !== oldKeys.length) {
          addKey(key);
        } else {
          newKeys.forEach(function (newKey) {
            if (swiperParams[key][newKey] !== oldParams[key][newKey]) {
              addKey(key);
            }
          });
          oldKeys.forEach(function (oldKey) {
            if (swiperParams[key][oldKey] !== oldParams[key][oldKey]) addKey(key);
          });
        }
      } else if (swiperParams[key] !== oldParams[key]) {
        addKey(key);
      }
    }
  });
  return keys;
}

export { getChangedParams };