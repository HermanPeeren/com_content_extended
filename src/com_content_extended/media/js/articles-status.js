/**
 * @copyright  (C) 2024 Herman Peeren, Yepr
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

(() => {

  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.article-status').forEach(element => {
      element.addEventListener('click', event => event.stopPropagation());
    });
  });
})();
