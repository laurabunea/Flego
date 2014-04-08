/**
 * Created by josh on 25/11/13.
 */

var assert = require('assert');
var client = require("webdriverjs").remote({
    logLevel: 'silent'
});

describe('A Mocha test run by grunt-mocha-selenium', function () {

//   describe('Test example.com', function(){
//     beforeEach(function(done) {
//         this.client.get('http://josh.kb.springload.co.nz', done);
//     });

//     describe('Check homepage', function(){
//         it('should see the correct title', function(done) {
//             this.browser.getTitle(function(title){
//                 expect(title).to.have.string('Example Domain');
//                 done();
//             });
//         });

//         it('should see the body', function(done) {
//             this.browser.getText('p', function(p){
//                 expect(title).to.have.string(
//                     'for illustrative examples in documents.'
//                 );
//                 done();
//             });
//         });
//     });

//     afterEach(function(done) {
//         // client.end();
//         done();
//     });
// });


    it('has a browser injected into it', function () {
        this.browser.get('http://josh.kb.springload.co.nz');
        assert.ok(this.browser.elementByName('title'));
    });

    // it('has a browser injected into it', function () {
    //   assert.ok();
    // });

});
