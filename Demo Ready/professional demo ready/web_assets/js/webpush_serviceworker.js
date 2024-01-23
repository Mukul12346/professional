function urlB64ToUint8Array(base64String){var padding="=".repeat((4-base64String.length%4)%4);var base64=(base64String+padding).replace(/\-/g,"+").replace(/_/g,"/");var rawData=window.atob(base64);var outputArray=new Uint8Array(rawData.length);for(var i=0;i<rawData.length;++i)outputArray[i]=rawData.charCodeAt(i);return outputArray}if("serviceWorker"in navigator&&"PushManager"in window)navigator.serviceWorker.register("lib/participant/webpush/webpush_serviceworker.js").then(function(swReg){swReg.update()}).catch(function(error){});
self.addEventListener("push",function(event){console.log("[Service Worker] Push Received.");self.registration.update();var payload=event.data.json();var options={body:payload.body,icon:payload.icon};if(payload.dir)options.dir=payload.dir;if(payload.requireInteraction)options.requireInteraction=payload.requireInteraction;if(payload.data)options.data=payload.data;if(payload.image)options.image=payload.image;if(payload.badge)options.badge=payload.badge;if(payload.tag)options.tag=payload.tag;if("actions"in
Notification.prototype&&payload.actions)options.actions=payload.actions;event.waitUntil(self.registration.showNotification(payload.title,options))});self.addEventListener("notificationclick",function(event){console.log("[Service Worker] Notification click Received.");event.notification.close();if(event.notification.data&&event.notification.data.link&&event.notification.data.link!="")event.waitUntil(clients.openWindow(event.notification.data.link))});