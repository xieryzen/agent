/* NexHost AI landing v4 (z.ai style) — chat-first composer, cards → prompt, reveal, typed terminals, count-up, reading-bar demo, nav */
(function(){
'use strict';
var D=document,H=D.documentElement;
var RM=window.matchMedia&&window.matchMedia('(prefers-reduced-motion: reduce)').matches;
var PENDING='nxai_pending';
H.classList.add('js');
function ready(f){D.readyState==='loading'?D.addEventListener('DOMContentLoaded',f):f()}
ready(function(){
  /* ---- top bar stuck state ---- */
  var nav=D.getElementById('nav');
  function onScroll(){if(nav)nav.classList.toggle('stuck',window.scrollY>10)}
  onScroll();window.addEventListener('scroll',onScroll,{passive:true});

  /* ---- mobile / narrow menu ---- */
  var b=D.getElementById('navBurger'),m=D.getElementById('navLinks');
  if(b&&m){
    b.addEventListener('click',function(e){
      e.stopPropagation();
      var o=m.classList.toggle('open');
      b.setAttribute('aria-expanded',o?'true':'false');
    });
    m.querySelectorAll('a').forEach(function(a){
      a.addEventListener('click',function(){m.classList.remove('open');b.setAttribute('aria-expanded','false')});
    });
    D.addEventListener('click',function(e){
      if(m.classList.contains('open')&&!m.contains(e.target)&&!b.contains(e.target)){
        m.classList.remove('open');b.setAttribute('aria-expanded','false');
      }
    });
  }

  /* ---- chat-first composer: type here, sign in, the prompt is waiting in the app ---- */
  var form=D.getElementById('zxComp'),ta=D.getElementById('zxIn'),send=D.getElementById('zxSend');
  function autosize(){if(!ta)return;ta.style.height='auto';ta.style.height=Math.min(ta.scrollHeight,220)+'px'}
  function sync(){if(send)send.disabled=!(ta&&ta.value.trim())}
  function go(){
    var t=ta?ta.value.trim():'';
    try{if(t)localStorage.setItem(PENDING,JSON.stringify({t:t.slice(0,8000),at:Date.now()}))}catch(_){}
    location.href='/login.php';
  }
  if(form&&ta){
    ta.addEventListener('input',function(){autosize();sync()});
    ta.addEventListener('keydown',function(e){
      if(e.key==='Enter'&&!e.shiftKey&&!e.isComposing){e.preventDefault();if(ta.value.trim())go()}
    });
    form.addEventListener('submit',function(e){e.preventDefault();go()});
    sync();
  }
  function fill(t,scroll){
    if(!ta){location.href='/login.php';return}
    ta.value=t;autosize();sync();
    if(scroll){
      var r=form.getBoundingClientRect();
      if(r.top<0||r.bottom>window.innerHeight)form.scrollIntoView({behavior:RM?'auto':'smooth',block:'center'});
    }
    try{ta.focus({preventScroll:true})}catch(_){ta.focus()}
    ta.setSelectionRange(t.length,t.length);
  }
  /* home cards + inspiration chips put their prompt in the composer (like z.ai's mode cards) */
  D.querySelectorAll('[data-p]').forEach(function(el){
    el.addEventListener('click',function(e){
      e.preventDefault();
      D.querySelectorAll('.zc.sel').forEach(function(x){x.classList.remove('sel')});
      if(el.classList.contains('zc'))el.classList.add('sel');
      fill(el.getAttribute('data-p')||'',true);
    });
  });

  if(!('IntersectionObserver' in window)||RM){
    D.querySelectorAll('.rv,.tl').forEach(function(el){el.classList.add('in','on')});
    return;
  }

  /* ---- reveal on scroll ---- */
  var io=new IntersectionObserver(function(es){
    es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}});
  },{rootMargin:'0px 0px -7% 0px',threshold:.08});
  D.querySelectorAll('.rv').forEach(function(el){io.observe(el)});

  /* ---- typed terminals ---- */
  var to=new IntersectionObserver(function(es){
    es.forEach(function(e){
      if(!e.isIntersecting)return;
      to.unobserve(e.target);
      var ls=e.target.querySelectorAll('.tl'),i=0,cur=D.createElement('span');
      cur.className='cur';
      (function next(){
        if(i>=ls.length){cur.remove();return}
        var l=ls[i++];
        l.classList.add('on');
        l.appendChild(cur);
        setTimeout(next,l.classList.contains('c')?520:250);
      })();
    });
  },{threshold:.3});
  D.querySelectorAll('.tm[data-type]').forEach(function(t){to.observe(t)});

  /* ---- count-up stats ---- */
  var co=new IntersectionObserver(function(es){
    es.forEach(function(e){
      if(!e.isIntersecting)return;
      co.unobserve(e.target);
      var el=e.target,end=parseInt(el.getAttribute('data-count'),10);
      if(!end||isNaN(end))return;
      var t0=null,dur=900;
      function tick(ts){
        if(!t0)t0=ts;
        var p=Math.min(1,(ts-t0)/dur);
        el.textContent=String(Math.max(1,Math.round(end*(1-Math.pow(1-p,3)))));
        if(p<1)requestAnimationFrame(tick);
      }
      requestAnimationFrame(tick);
    });
  },{threshold:.5});
  D.querySelectorAll('[data-count]').forEach(function(el){co.observe(el)});

  /* ---- big-attachment reading demo ---- */
  var p=D.getElementById('rbPart'),p2=D.getElementById('rbPart2'),pc=D.getElementById('rbPct'),f=D.getElementById('rbFill');
  if(p&&f){
    var n=5;
    setInterval(function(){
      n=n>=28?1:n+1;
      p.textContent=n;if(p2)p2.textContent=n;
      var v=Math.round(n/28*100);
      if(pc)pc.textContent=v+'%';
      f.style.width=v+'%';
    },1100);
  }
});
})();
